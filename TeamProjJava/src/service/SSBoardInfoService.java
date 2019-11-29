package service;

import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BoardDAO;
import dto.Board;
import service.ServiceDAO;

public class SSBoardInfoService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("게시글 보기 시스템");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		HttpSession session 	= request.getSession();
		long no 				= Long.parseLong(request.getParameter("no"));
		PrintWriter out 		= response.getWriter();
		SqlSession sqlSession 	= MBUtils.getSession();
		BoardDAO dao 			= sqlSession.getMapper(BoardDAO.class);
		Board data 				= new Board();
		RequestDispatcher rd 	= request.getRequestDispatcher("../DataAnalysticsDetail.jsp");
		try {
			data = dao.info(no);
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