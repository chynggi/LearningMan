package service;

import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class MemberDeleteService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		request.setCharacterEncoding("UTF-8");
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();	
		HttpSession session = request.getSession();
		String message = null;
		String id = request.getParameter("memId");
		String pw = request.getParameter("memPw");
		SqlSession sqlsession = MBUtils.getSession();
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		RequestDispatcher rd = request.getRequestDispatcher("./MyInfoUpdate.jsp");
		try {
			Buser vo = dao.selectById(id);			
			if (vo.getPassword().equals(pw)) {
				dao.delete(id);
				
				response.sendRedirect("../main.do");
			} else {
				message = "비밀번호가 일치하지 않습니다.";
				session.setAttribute("message", message);
				response.sendRedirect("./MyInfoDelete.jsp");

			}
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			message = "회원정보가 존재하지 않습니다.";
			session.setAttribute("message", message);
			
			sqlsession.close();
			response.sendRedirect("./MyInfoDelete.jsp");
			return false;
		}
		sqlsession.close();
		return true;
	}

}
