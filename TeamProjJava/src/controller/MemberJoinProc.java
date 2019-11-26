package controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.annotation.PostConstruct;
import javax.annotation.PreDestroy;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

/**
 * Servlet implementation class MemberJoinProc
 */
@WebServlet("/MJC")
public class MemberJoinProc extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public MemberJoinProc() {
        super();
        // TODO Auto-generated constructor stub
        System.out.println("Created Servlet Object: MemberJoicProduce");
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
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub	
		request.setCharacterEncoding("UTF-8");
		
		String id = request.getParameter("id");
		String password = request.getParameter("password");
		String name = request.getParameter("name");
		
		response.setCharacterEncoding("UTF-8");
		//태그인식 여부
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter writer = response.getWriter();
		SqlSession session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		BuserDAO dao = session.getMapper(BuserDAO.class);
		Buser mem = new Buser(id, name, password);
		try {
			dao.insert(mem);
			session.commit();
			writer.print("<h1>회원가입을 환영합니다!</h1>");
			writer.print("<a href='./login/formLogin.jsp'>로그인</a>");
			
		} catch (Exception e) {
			e.printStackTrace();
			session.rollback();		
			writer.print("<h1>정보를 확인하고 다시 시도해 주세요.</h1>");
			writer.print("<a href='./mymember/memberJoin.jsp'>회원가입</a>");
		}
		session.close();
		writer.close();
	
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}