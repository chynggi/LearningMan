package controller;

import java.io.IOException;
import java.io.PrintWriter;

import javax.annotation.PostConstruct;
import javax.annotation.PreDestroy;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import javax.websocket.Session;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

/**
 * Servlet implementation class LoginProc_
 */
@WebServlet("/LP")
public class LoginProc extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public LoginProc() {
		super();
		// TODO Auto-generated constructor stub
		System.out.println("Created Servlet Object");
	}

	@PostConstruct
	public void init() {
		System.out.println("FirstCallWithCreate");
	}

	@PreDestroy
	public void destroy() {
		System.out.println("FirstCallWithExit");
		;
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		//파라미터/응답 인코딩 방식 지정
		request.setCharacterEncoding("UTF-8");
		String id = request.getParameter("id");
		String password = request.getParameter("password");

		response.setCharacterEncoding("UTF-8");
		//태그인식 여부
		response.setContentType("text/html;charset=UTF-8");

		PrintWriter writer = response.getWriter();
		SqlSession session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		BuserDAO dao = session.getMapper(BuserDAO.class);
		Buser mem = null;
		try {
			mem = dao.selectById(id);
			if (mem.getPassword().equals(password)) {
				
				writer.print("로그인 성공<br/>");
				
				HttpSession tsession = request.getSession();
				tsession.setAttribute("loginOK", "OK");
				tsession.setAttribute("id", id);
				tsession.setAttribute("name", mem.getName());
				writer.print("<a href='./homebook/form_homebook.jsp'>가계부입력</a>");
			} else {
				writer.print("로그인 실패<br/>");
				writer.print("<a href='./login/formLogin.jsp'>로그인</a>");
				writer.print("<a href='./mymember/memberJoin.jsp'>회원가입</a>");

			}
		} catch (Exception e) {
			e.printStackTrace();
			writer.print("로그인 실패<br/>");
			writer.print("<a href='./login/formLogin.jsp'>로그인</a>");
			writer.print("<a href='./mymember/memberJoin.jsp'>회원가입</a>");
		}
		session.close();
		writer.close();
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}