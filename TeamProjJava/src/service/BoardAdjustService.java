package service;

import java.io.PrintWriter;
import java.util.HashMap;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.apache.ibatis.session.SqlSession;
import common.MBUtils;
import dao.BoardDAO;
import dto.Board;

public class BoardAdjustService implements Service{
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Adjusting");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out  = response.getWriter();
		String title 	 = request.getParameter("title");
		String content 	 = request.getParameter("content");
		String id 		 = request.getParameter("id");
		String tablename = request.getParameter("tablename");
		String date = request.getParameter("date");
		long no = Long.parseLong(request.getParameter("no"));
		out.print("title:" + title + "<br/>");
		out.print("내용:" + content + "<br/>");
		out.print("날짜: " + date + "<br/>");
		out.print("ID:" + id + "<br/>");		
		
		//
		Board vo = new Board();
		vo.setNo(no);
		vo.setContent(content);
		vo.setId(id);
		vo.setTitle(title);
		vo.setDate(date);
		HashMap<String,Object> para = new HashMap<String,Object>();
		para.put("dbname", tablename);
		para.put("board",vo);
		out.print(vo + "<br/>");
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.update(para);
			if (res > 0) {
				sqlSession.commit();
				out.print("Data Input Success! 수정 성공");
			} else {
				sqlSession.rollback();
				out.print("Data Input Failed! 수정 실패");
				return false;
			}
		} catch (Exception e) {
			System.err.println("수정하려는 데이터나 구문에 문제가 있습니다.");
			e.printStackTrace();
			return false;
		}
		response.sendRedirect("./Info.do?no="+no);

		return true;
	}
}