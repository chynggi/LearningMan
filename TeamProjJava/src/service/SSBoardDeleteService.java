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
		System.out.println("게시글 삭제");
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
				out.print("삭제 성공");
			} else {
				sqlSession.rollback();
				out.print("삭제 실패");
				return false;
			}
		} catch (Exception e) {
			System.err.println("삭제하려는 데이터나 구문에 문제가 있습니다.");
			e.printStackTrace();
			return false;
		}

		out.print("<a href=\"DataAnalysticsAdd.jsp\">계속 작업</a>");
		out.print("<button type=\"button\" onclick=\"location.href='datadisp.jsp'\">입력자료출력</button>");

		return true;
	}


}
