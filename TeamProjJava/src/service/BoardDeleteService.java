package service;

import java.io.PrintWriter;
import java.util.HashMap;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BoardDAO;

public class BoardDeleteService implements Service{
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Adjusting");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		String tablename = request.getParameter("tablename");
		PrintWriter out = response.getWriter();		
		String id = request.getParameter("id");
		long no = Long.parseLong(request.getParameter("no"));
		HashMap<String,Object> para = new HashMap<String,Object>();
		para.put("dbname", tablename);
		para.put("no",no);
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.delete(para);
			if (res > 0) {
				sqlSession.commit();
				out.print("Data Delete Success! 삭제 성공");
			} else {
				sqlSession.rollback();
				out.print("Data Delete Failed! 삭제 실패");
				return false;
			}
		} catch (Exception e) {
			System.err.println("삭제하려는 데이터나 구문에 문제가 있습니다.");
			e.printStackTrace();
			return false;
		}

		out.print("<a href=\"form_Board.jsp\">계속 작업</a>");
		out.print("<button type=\"button\" onclick=\"location.href='datadisp.jsp'\">입력자료출력</button>");

		return true;
	}


}