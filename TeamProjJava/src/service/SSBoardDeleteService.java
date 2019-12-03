package service;

import java.io.PrintWriter;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BoardDAO;
import dto.Board;

public class SSBoardDeleteService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("게시글 수정 시스템");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();
		String title 	= request.getParameter("title");
		String content 	= request.getParameter("content");
		String id 		= request.getParameter("id");
		String xdate 	= request.getParameter("xdate");
		out.print("title:" 	+ title 	+ "<br/>");
		out.print("내용:" 	+ content 	+ "<br/>");
		out.print("날짜: " 	+ xdate 	+ "<br/>");
		out.print("ID:" 	+ id 		+ "<br/>");
		
		Board vo = new Board();		
		vo.setContent(content);
		vo.setId(id);
		vo.setTitle(title);
		vo.setDate(xdate);
		
		out.print(vo + "<br/>");
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.insert(vo);
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
		out.print("<a href=\"./DataAnalysticsUpdate.jsp\">추가 작업</a>");
		out.print("<button type=\"button\" onclick=\"location.href='./List.do'\">목록</button>");
		return true;
	}
}