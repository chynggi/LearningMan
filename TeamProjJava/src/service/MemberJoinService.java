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
		System.out.println("회원 가입정보를 등록합니다.....");
		
		request.setCharacterEncoding("UTF-8");
		String id = request.getParameter("id");
		SqlSession session = MBUtils.getSession();
		String message = null;		
		response.setContentType("text/html;charset=UTF-8");
		BuserDAO dao = session.getMapper(BuserDAO.class);
		Buser vo = dao.selectById(id);
		HttpSession httpsession = request.getSession();
	
				
		if (vo != null) {
			message = "중복된 아이디 입니다.";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./member/signup.jsp");
			return false;
		} else {
		session.close();

		String password = request.getParameter("password");
		String password2 = request.getParameter("password2");
		if(!password.equals(password2)){

			message = "비밀번호 재확인 [비밀번호 랑 비밀번호 확인 이 일치하지 않음]";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./member/signup.jsp");
			return false;
		} 


		String name = request.getParameter("name");
		String phone = request.getParameter("phone");
		String date = new SimpleDateFormat("yyyy-MM-dd").format(new Date());		
		
		//태그인식 여부		
		PrintWriter writer = response.getWriter();
		session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		dao = session.getMapper(BuserDAO.class);
		Buser mem = new Buser(id, name, password,phone,date);
		
		try {
			dao.insert(mem);			
			httpsession.setAttribute("joinedID", id);
			session.commit();
			response.sendRedirect("../main.do");	
		} catch (Exception e) {
			e.printStackTrace();
			session.rollback();					
			message ="정보를 확인하고 다시 시도해 주세요.";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./member/signup.jsp");
			return false;
		} session.close();
		
		
		writer.print("축하합니다. 회원가입 되셨습니다.");
		writer.print("<a href='signup.jsp'>되돌아가기</a><br>"); // 가입화면
		writer.print("<a href='Login.jsp'>로그인하기</a><br>");	// 로그인화면
		
		session.close();
		writer.close();
		return true;
		}
	}

}