package service;

import java.io.PrintWriter;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BoardDAO;

public class SSBoardDeleteService implements Service{
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("게시글 삭제 시스템");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		
		PrintWriter out 		= response.getWriter();		
		String id 				= request.getParameter("id");
		long no 				= Long.parseLong(request.getParameter("no"));
		SqlSession sqlSession 	= MBUtils.getSession();
		BoardDAO dao 			= sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.delete(no);
			if (res > 0) {
				sqlSession.commit();
				out.print("성공");
			} else {
				sqlSession.rollback();
				out.print("실패");
				return false;
			}
		} catch (Exception e) {
			System.err.println("문제가 있음");
			e.printStackTrace();
			return false;
		}

		out.print("<a href=\"./DataAnalysticsDelete.jsp\">추가 작업</a>");
		out.print("<button type=\"button\" onclick=\"location.href='./List.do'\">목록</button>");

		return true;
	}


}
