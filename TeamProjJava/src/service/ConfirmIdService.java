package service;

import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class ConfirmIdService implements Service {
	/*
	 *
	 * 
	 * 
	 */
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		try {
			System.out.println("ConfID");
			request.setCharacterEncoding("UTF-8");
			// 세팅 위치 : Important!
			response.setContentType("text/html;charset=UTF-8");
			SqlSession session = MBUtils.getSession();
			BuserDAO dao = session.getMapper(BuserDAO.class);
			String id = request.getParameter("tempid");
			Buser vo = dao.selectById(id);
			PrintWriter out = response.getWriter();
			session.close();
			RequestDispatcher rd = request.getRequestDispatcher("./ConfirmID.jsp");
			if (vo != null) {
				request.setAttribute("thisIDexist", "true");
			} else {
				request.setAttribute("thisIDexist", "false");
			}
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			return false;
		}
		
		return true;
	}

}
