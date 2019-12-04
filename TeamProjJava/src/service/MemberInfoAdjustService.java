package service;

import java.io.PrintWriter;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.apache.ibatis.session.SqlSession;
import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class MemberInfoAdjustService implements Service {
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();
		String mid = request.getParameter("id");
		String mname = request.getParameter("name");
		String mpassword = request.getParameter("password");
		SqlSession sqlsession = MBUtils.getSession();
		BuserDAO dao = sqlsession.getMapper(BuserDAO.class);
		Buser mem = dao.selectById(mid);
		if (mem == null) {
			out.print("<h1>FATAL ERROR: 일치하는 아이디가 없습니다.</h1>" + "<a href='Location.history(-1)'>Go Back</a>");
		} else {
			try {
				System.out.println(mem);
				dao.update(mem);
				sqlsession.commit();				
			} catch (Exception e) {
				sqlsession.rollback();
				sqlsession.close();
				e.printStackTrace();
				return false;
			}
		} sqlsession.close();
		return true;
	}
}