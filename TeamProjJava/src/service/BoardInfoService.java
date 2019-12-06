package service;

import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.HashMap;
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

public class BoardInfoService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("Board Info. Display");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		
		HttpSession session = request.getSession();
		long no = Long.parseLong(request.getParameter("no"));
		PrintWriter out = response.getWriter();
		String tablename = (String)request.getAttribute("tablename");
		SqlSession sqlSession = MBUtils.getSession();
		BoardDAO dao = sqlSession.getMapper(BoardDAO.class);
		Board data = new Board();
		HashMap<String,Object> para = new HashMap<String,Object>();
		
		para.put("dbname", tablename);
		para.put("no",no);
		
		RequestDispatcher rd = null;
		
		if(tablename.equals("DBMSBOARD"))
		{
			rd = request.getRequestDispatcher("./dbms_WBoard.jsp");
			
		}
		else if(tablename.equals("SSBOARD"))
		{
			
			rd = request.getRequestDispatcher("./DataAnalysticsDetail.jsp");
		}
		else if(tablename.equals("OOPBOARD"))
		{
			rd = request.getRequestDispatcher("./DataAnalysticsDetail.jsp");
			
		}
		else if(tablename.equals("FRBOARD"))
		{
			rd = request.getRequestDispatcher("./DataAnalysticsDetail.jsp");
			
		}
		else
		{
			rd = request.getRequestDispatcher("./DataAnalysticsDetail.jsp");
			
		}
		
		
		
		
		
		
		
		try {
			data = dao.info(para);
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