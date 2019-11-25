package service;

import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BoardDAO;
import dto.Board;

public class SSBoardListService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Info. Display");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
		List<Board> data = new ArrayList<>();
		RequestDispatcher rd = request.getRequestDispatcher("./datadisp.jsp");
		try {
			data = dao.selectAll();
			request.setAttribute("data", data);
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			sqlSession.close();
			return false;
		}
		sqlSession.close();
		return true;
	}

}