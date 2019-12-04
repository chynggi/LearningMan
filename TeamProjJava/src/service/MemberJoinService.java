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
<<<<<<< Upstream, based on origin/master
		String message = null;
		String mid = request.getParameter("id");
=======
		String id = request.getParameter("id");
>>>>>>> 42c7f6f 2019-12-04  15:00
		SqlSession session = MBUtils.getSession();
		String message = null;		
		response.setContentType("text/html;charset=UTF-8");
		BuserDAO dao = session.getMapper(BuserDAO.class);
<<<<<<< Upstream, based on origin/master
		Buser vo = dao.selectById(mid);
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		HttpSession httpsession = request.getSession();
		PrintWriter out = response.getWriter();
=======
		Buser vo = dao.selectById(id);
>>>>>>> 42c7f6f 2019-12-04  15:00
		
		HttpSession httpsession = request.getSession();
				
		if (vo != null) {
			message = "중복된 아이디 입니다.";
			httpsession.setAttribute("message", message);
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("./memberJoin.jsp");
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> 42c7f6f 2019-12-04  15:00
			return false;
		} else {
		session.close();
<<<<<<< Upstream, based on origin/master
		String mpassword = request.getParameter("pw");
		String mpassword2 = request.getParameter("pw2");
		if(!mpassword.equals(mpassword2)){
=======
		String password = request.getParameter("password");
		String password2 = request.getParameter("password2");
		if(!password.equals(password2)){
>>>>>>> 42c7f6f 2019-12-04  15:00
			message = "비밀번호 재확인 [비밀번호 랑 비밀번호 확인 이 일치하지 않음]";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./member/signup.jsp");
			return false;
		} 
<<<<<<< Upstream, based on origin/master
		String mname = request.getParameter("name");
		String mphone = request.getParameter("phone");
		String mjoinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());		
=======
		String name = request.getParameter("name");
		String phone = request.getParameter("phone");
		String joinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
>>>>>>> 42c7f6f 2019-12-04  15:00
		
		//태그인식 여부		
		PrintWriter writer = response.getWriter();
		session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
		dao = session.getMapper(BuserDAO.class);
<<<<<<< Upstream, based on origin/master
<<<<<<< HEAD
		Buser mem = new Buser(mid, mname, mpassword,mphone,mjoinDate);
=======
<<<<<<< HEAD
		Buser mem = new Buser(mid, mname, mpassword);
=======
		Buser mem = new Buser(mid, mname, mpassword, mphone, mjoinDate );
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/master
=======
		Buser mem = new Buser(id, name, password,phone,joinDate);
>>>>>>> 42c7f6f 2019-12-04  15:00
		try {
			dao.insert(mem);			
			httpsession.setAttribute("joinedID", mid);
			session.commit();
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("../main.do");			
=======
			
>>>>>>> 42c7f6f 2019-12-04  15:00
		} catch (Exception e) {
			e.printStackTrace();
			session.rollback();					
			message ="정보를 확인하고 다시 시도해 주세요.";
			httpsession.setAttribute("message", message);
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("./signup.jsp");
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> 42c7f6f 2019-12-04  15:00
			return false;
<<<<<<< Upstream, based on origin/master
		} session.close();
=======
		}
		
		writer.print("축하합니다. 회원가입 되셨습니다.");
		writer.print("<a href='signup.jsp'>되돌아가기</a><br>"); // 가입화면
		writer.print("<a href='Login.jsp'>로그인하기</a><br>");	// 로그인화면
		
		session.close();
>>>>>>> 42c7f6f 2019-12-04  15:00
		writer.close();
		return true;
		}
	}
<<<<<<< Upstream, based on origin/master
=======

>>>>>>> 42c7f6f 2019-12-04  15:00
}