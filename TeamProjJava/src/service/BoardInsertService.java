package service;

import java.io.PrintWriter;
import java.util.HashMap;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.apache.ibatis.session.SqlSession;
import common.MBUtils;
import dao.BoardDAO;
import dto.Board;

public class BoardInsertService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Adjusting");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
<<<<<<< Upstream, based on origin/master
		PrintWriter out  = response.getWriter();
		String title     = request.getParameter("title");
		String content   = request.getParameter("content");
		String id 		 = request.getParameter("id");
		String tablename = request.getParameter("tablename");
=======
		PrintWriter out = response.getWriter();
		String title = request.getParameter("title");
		String date = request.getParameter("date");
		String content = request.getParameter("content");
		String id = request.getParameter("id");
		String tablename = (String)request.getAttribute("tablename");
		System.out.println(tablename);
<<<<<<< HEAD
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
>>>>>>> refs/remotes/origin/ssy
		out.print("title:" + title + "<br/>");
		out.print("내용:" + content + "<br/>");
		out.print("ID:" + id + "<br/>");
		//
		Board vo = new Board();		
		vo.setContent(content);
		vo.setId(id);
		vo.setTitle(title);
<<<<<<< HEAD
<<<<<<< Upstream, based on origin/master
=======
=======
>>>>>>> refs/remotes/origin/ssy
		vo.setDate(date);

>>>>>>> 42c7f6f 2019-12-04  15:00
		
		out.print(vo + "<br/>");
		HashMap<String,Object> para = new HashMap<String,Object>();
		para.put("dbname", tablename);
		para.put("board",vo);
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);

		int res = 0;
		try {
			res = dao.insert(para);
			if (res > 0) {
				sqlSession.commit();
				out.print("Data Input Success! 입력 성공");
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
<<<<<<< Upstream, based on origin/master
			
		response.sendRedirect("./List.do");
=======

		response.sendRedirect("./board_list.jsp");
<<<<<<< HEAD
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
>>>>>>> refs/remotes/origin/ssy
		return true;
	}
}