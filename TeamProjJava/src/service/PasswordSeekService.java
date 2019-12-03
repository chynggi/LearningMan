package service;

import java.io.PrintWriter;
import java.sql.Connection;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import org.apache.ibatis.session.SqlSession;
import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class PasswordSeekService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Member's Password Seek");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();		
		HttpSession session = request.getSession();
		String id = request.getParameter("id");
		SqlSession sqlsession = MBUtils.getSession();
		String message = null;
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		Buser mem = null;
		try {
			mem = dao.selectById(id);
			if(mem!=null) {
			message = "비밀번호는 "+mem.getPassword()+" 입니다.";
			session.setAttribute("message", message);
			response.sendRedirect("./loginorReg.jsp");				
			} else {
				message = "FATAL ERROR: 일치하는 아이디가 없습니다.";
				session.setAttribute("message", message);
				response.sendRedirect("./loginorReg.jsp");
			}			
		} catch(Exception e) {
			e.printStackTrace();
			message = "FATAL ERROR: 일치하는 아이디가 없습니다.";
			session.setAttribute("message", message);
			response.sendRedirect("./loginorReg.jsp");
		} sqlsession.close();
		return true;
	}
}