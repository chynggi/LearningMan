package service;

import java.io.PrintWriter;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;


import common.MBUtils;
import dao.BoardDAO;
import dto.Board;

public class DBMSBoardInsertService implements Service {
// 작성
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Adjusting");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();
		String title = request.getParameter("dbmstitle");
		String content = request.getParameter("dbmsContent");
		String id = request.getParameter("id");

		out.print("제목:" + title + "<br/>");
		out.print("내용:" + content + "<br/>");
		out.print("작성자:" + id + "<br/>");


		//
		Board vo = new Board();		
		vo.setContent(content);
		vo.setId(id);
		vo.setTitle(title);
		
		out.print(vo + "<br/>");
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.insert(vo);
			if (res > 0) {
				sqlSession.commit();				
				out.print("Data Input Success! 성공");
			} else {
				sqlSession.rollback();
				out.print("Data Input Failed! 입력 실패");
				return false;
			}
		} catch (Exception e) {
			System.err.println("입력하려는 데이터나 구문에 문제가 있습니다.");
			e.printStackTrace();
			return false;
		}

		out.print("<a href=\"../board_list.jsp\">계속 작업</a>");
//		out.print("<button type=\"button\" onclick=\"location.href='datadisp.jsp'\">입력자료출력</button>");

		return true;
	}

}
