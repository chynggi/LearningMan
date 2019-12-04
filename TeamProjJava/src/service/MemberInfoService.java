package service;

import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import org.apache.ibatis.session.SqlSession;
import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class MemberInfoService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		request.setCharacterEncoding("UTF-8");
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();		
		HttpSession session = request.getSession();
		String id = (String) session.getAttribute("id");
		SqlSession sqlsession = MBUtils.getSession();
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		RequestDispatcher rd = request.getRequestDispatcher("./MyInfoUpdate.jsp");
		try {
			Buser vo = dao.selectById(id);
			request.setAttribute("id", id);
<<<<<<< Upstream, based on origin/master
			request.setAttribute("name", vo.getName());
=======
			request.setAttribute("name", vo.getName());
			request.setAttribute("password", vo.getPassword());
<<<<<<< Upstream, based on origin/master
<<<<<<< HEAD
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
>>>>>>> refs/remotes/origin/ssy
=======
>>>>>>> fe99d9a 141
			request.setAttribute("phone", vo.getPhone());
<<<<<<< Upstream, based on origin/master
<<<<<<< HEAD
<<<<<<< Upstream, based on origin/master
			request.setAttribute("xdate", vo.getXdate());
=======
			request.setAttribute("xdate", vo.getDate());
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
			request.setAttribute("xdate", vo.getDate());
>>>>>>> refs/remotes/origin/ssy
=======
			request.setAttribute("xdate", vo.getDate());
>>>>>>> fe99d9a 141
			rd.forward(request, response);
		} catch (Exception e) {
			e.printStackTrace();
			sqlsession.close();
			return false;
		} sqlsession.close();
		return true;
	}
}