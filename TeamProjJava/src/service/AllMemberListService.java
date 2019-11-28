package service;

import java.io.PrintWriter;
import java.sql.Connection;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class AllMemberListService implements Service {

	/*
	 * 
	 * <h1>BMembers List</h1> <h4><a href="../homebook/form_homebook.jsp" >메인으로
	 * 돌아가기</a></h4> <hr> <table border="1"> <tr> <th>ID</th> <th>이름</th>
	 * <th>P/W</th> <th>Phone</th> </tr> <% Connection conn =
	 * ConnectionFactory.getConnection(); BMemberDAO dao = new BMemberDAO();
	 * List<BMember> data = dao.selectall(conn); if(data.size()>0) { for(BMember
	 * x:data) { out.print("<tr>"); out.print("<td>"+x.getId()+"</td>");
	 * out.print("<td>"+x.getName()+"</td>");
	 * out.print("<td>"+x.getPassword()+"</td>");
	 * out.print("<td>"+x.getPhone()+"</td>"); out.print("</tr>"); } } else {
	 * out.print("<tr colspan='4'>데이터가 없습니다.</tr>"); }
	 * 
	 * %> </table>
	 */
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		System.out.println("All Members Info. List Display");
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		RequestDispatcher rd = request.getRequestDispatcher("./joinlist.jsp");
		SqlSession sqlSession = MBUtils.getSession();
		BuserDAO dao =sqlSession.getMapper(BuserDAO.class);
		try {
		List<Buser> data = dao.selectAll();
		request.setAttribute("data",data);
		rd.forward(request, response);
		}
		catch(Exception e)
		{
			e.printStackTrace();
			return false;
		}
		return true;
	}

}
