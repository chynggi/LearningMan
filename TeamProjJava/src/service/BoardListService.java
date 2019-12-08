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

public class BoardListService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Info. Display");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		String tablename = (String)request.getAttribute("tablename");
		System.out.println(tablename);		
		PrintWriter out = response.getWriter();
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
		List<Board> data = new ArrayList<>();
		RequestDispatcher rd = null;
		if(tablename.equals("SSBOARD"))
		{
			response.sendRedirect("./List.jsp");
		}
		else if(tablename.equals("DBMSBOARD"))
		{
			response.sendRedirect("./board_list.jsp");
		}
		else if(tablename.equals("FRBOARD"))
		{
			response.sendRedirect("./board_list.jsp");
		}
		else if(tablename.equals("DABOARD"))
		{
			response.sendRedirect("./DataAnalysticsList.jsp");
		}
		else if(tablename.equals("OOPBOARD"))
		{
			response.sendRedirect("./OOP_List.jsp");
		}
		else
		{
			response.sendRedirect("../index.jsp");
		}
		
		
		
		
		try {
			data = dao.selectAll(tablename);
			request.setAttribute("data", data);
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			sqlSession.close();
			return false;
		} sqlSession.close();
		return true;
	}
}