package service;

import java.io.PrintWriter;
import java.sql.Connection;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class AllMemberListService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("All Members Info. List Display");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		RequestDispatcher rd = request.getRequestDispatcher("./joinlist.jsp");
		SqlSession sqlSession = MBUtils.getSession();
		BuserDAO dao =sqlSession.getMapper(BuserDAO.class);
		try {
		List<Buser> data = dao.selectAll();
		request.setAttribute("data",data);
		rd.forward(request, response);
		}
		catch(Exception e)
		{
			e.printStackTrace();
			return false;
		}
		return true;
	}

}