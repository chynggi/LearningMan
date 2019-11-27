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

public class MemberInfoService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		request.setCharacterEncoding("UTF-8");
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();		
		HttpSession session = request.getSession();
		String id = (String) session.getAttribute("id");
		SqlSession sqlsession = MBUtils.getSession();
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		RequestDispatcher rd = request.getRequestDispatcher("./MyMemberInfo.jsp");
		try {
			Buser vo = dao.selectById(id);
			request.setAttribute("id", id);
			request.setAttribute("name", vo.getName());
			request.setAttribute("password", vo.getPw());
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			sqlsession.close();
			return false;
		}
		sqlsession.close();
		return true;
	}

}
