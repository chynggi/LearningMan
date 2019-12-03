package service;

import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.apache.ibatis.session.SqlSession;

import common.MBUtils;
import dao.BuserDAO;
import dto.Buser;

public class MemberJoinService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		// TODO Auto-generated method stub
		request.setCharacterEncoding("UTF-8");
		String message = null;
		String mid = request.getParameter("mid");
		SqlSession session = MBUtils.getSession();
		BuserDAO dao = session.getMapper(BuserDAO.class);
		Buser vo = dao.selectById(mid);
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		HttpSession httpsession = request.getSession();
		PrintWriter out = response.getWriter();
		
		if (vo != null) {
			message = "중복된 아이디 입니다.";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./memberJoin.jsp");
			return false;
		} 
		else {
		session.close();
		String mpassword = request.getParameter("mpassword");
		String mpassword2 = request.getParameter("mpassword2");
		if(!mpassword.equals(mpassword2)){
			message = "비밀번호 재확인 [비밀번호 랑 비밀번호 확인 이 일치하지 않음]";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./memberJoin.jsp");
			return false;
		} 
		String mname = request.getParameter("mname");
		String mphone = request.getParameter("mphone");
		String mjoinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
		
		
		//태그인식 여부
		
		PrintWriter writer = response.getWriter();
		session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		dao = session.getMapper(BuserDAO.class);
		Buser mem = new Buser(mid, mname, mpassword, mphone, mjoinDate );
		try {
			dao.insert(mem);			
			httpsession.setAttribute("joinedID", mid);
			session.commit();
			response.sendRedirect("./JoinConfirm.do");
			
		} catch (Exception e) {
			e.printStackTrace();
			session.rollback();					
			message ="정보를 확인하고 다시 시도해 주세요.";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./memberJoin.jsp");
			return false;
		}
		session.close();
		writer.close();
		return true;
		}
	}

}
