package service;

import java.io.PrintWriter;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class LoginService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		// TODO Auto-generated method stub
		// 파라미터/응답 인코딩 방식 지정
		request.setCharacterEncoding("UTF-8");
		String id = request.getParameter("id");
		String password = request.getParameter("password");
		String message = null;
		response.setCharacterEncoding("UTF-8");
		// 태그인식 여부
		response.setContentType("text/html;charset=UTF-8");

		PrintWriter writer = response.getWriter();
		SqlSession sqlsession = MBUtils.getSession();
		HttpSession session = request.getSession();
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		Buser mem = null;
		try {
			mem = dao.selectById(id);
			if (mem.getPw().equals(password)) {
				session.setAttribute("loginOK", "OK");
				session.setAttribute("id", id);
				session.setAttribute("name", mem.getName());
				
				response.sendRedirect("../main.do");
			} else {
				message = "비밀번호가 일치하지 않습니다.";
				session.setAttribute("message", message);
				response.sendRedirect("./formLogin.jsp");

			}
		} catch (Exception e) {
			e.printStackTrace();
			message = "회원정보가 존재하지 않습니다.";
			session.setAttribute("message", message);
			response.sendRedirect("./formLogin.jsp");
			return false;
		}
		sqlsession.close();
		writer.close();
		return true;
	}/*
		 * <%
		 * 
		 * request.setCharacterEncoding("UTF-8"); String id =
		 * request.getParameter("id"); String password =
		 * request.getParameter("password"); MyMemberDAO dao = new MyMemberDAO();
		 * Connection conn = ConnectionFactory.getConnection(); PrintWriter writer =
		 * response.getWriter(); MyMember mem = null; try{ mem = dao.select(conn, id);
		 * if(mem.getPassword().equals(password)) {
		 * writer.print("<h1>LOGIN SUCCESS! WELCOME!</h1>"); session.setAttribute("id",
		 * id);
		 * 
		 * writer.print("<button type='button' onclick="+
		 * "location.href='../homebook/form_homebook.jsp'" +">Homebook Input</button>");
		 * 
		 * 
		 * } else { writer.print("<h1>LOGIN FAILED! CHECK YOUR PASSWORD!</h1>"); }
		 * 
		 * }catch (Exception e) { writer.print("<h1>LOGIN FAILED! CHECK YOUR ID!</h1>");
		 * e.printStackTrace(); } %>
		 * 
		 * 
		 * 
		 */

}
