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
// 비밀번호 재확인.
public class MemberJoinService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		// TODO Auto-generated method stub
		System.out.println("회원 가입정보를 등록합니다.....");
		
		request.setCharacterEncoding("UTF-8");
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< HEAD
		String message = null;
		String id = request.getParameter("id");
		String mid = request.getParameter("id");
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
>>>>>>> e77d7a0 2019-12-04  15:00
		String message = null;
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
		String mid = request.getParameter("mid");
>>>>>>> refs/remotes/origin/master
=======
		String mid = request.getParameter("id");
=======
		String id = request.getParameter("id");
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
		String id = request.getParameter("id");
>>>>>>> refs/remotes/origin/ssy
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
		SqlSession session = MBUtils.getSession();
		String message = null;		
		response.setContentType("text/html;charset=UTF-8");
		BuserDAO dao = session.getMapper(BuserDAO.class);
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
		Buser vo = dao.selectById(id);
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
		Buser vo = dao.selectById(mid);
>>>>>>> e77d7a0 2019-12-04  15:00
		response.setCharacterEncoding("UTF-8");
		response.setContentType("text/html;charset=UTF-8");
		HttpSession httpsession = request.getSession();
		PrintWriter out = response.getWriter();
=======
		Buser vo = dao.selectById(id);
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
		Buser vo = dao.selectById(id);
>>>>>>> refs/remotes/origin/ssy
		
		HttpSession httpsession = request.getSession();
				
		if (vo != null) {
			message = "중복된 아이디 입니다.";
			httpsession.setAttribute("message", message);
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
			response.sendRedirect("./loginorReg.jsp");
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("./memberJoin.jsp");
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> refs/remotes/origin/ssy
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
			return false;
		} 
		else {
		session.close();
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
		String mpassword = request.getParameter("mpassword");
		String mpassword2 = request.getParameter("mpassword2");
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
		String mpassword = request.getParameter("pw");
		String mpassword2 = request.getParameter("pw2");
>>>>>>> e77d7a0 2019-12-04  15:00
		if(!mpassword.equals(mpassword2)){
=======
		String password = request.getParameter("password");
		String password2 = request.getParameter("password2");
		if(!password.equals(password2)){
>>>>>>> 42c7f6f 2019-12-04  15:00
=======
		String password = request.getParameter("password");
		String password2 = request.getParameter("password2");
		if(!password.equals(password2)){
>>>>>>> refs/remotes/origin/ssy
			message = "비밀번호 재확인 [비밀번호 랑 비밀번호 확인 이 일치하지 않음]";
			httpsession.setAttribute("message", message);
			response.sendRedirect("./member/signup.jsp");
			return false;
		} 
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
		String mname = request.getParameter("mname");
		String mphone = request.getParameter("mphone");
		String mjoinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
		String mname = request.getParameter("name");
		String mphone = request.getParameter("phone");
		String mjoinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());		
=======
		String name = request.getParameter("name");
		String phone = request.getParameter("phone");
		String joinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
		String name = request.getParameter("name");
		String phone = request.getParameter("phone");
		String joinDate = new SimpleDateFormat("yyyy-MM-dd").format(new Date());
>>>>>>> refs/remotes/origin/ssy
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
		
		
		//태그인식 여부
		
		PrintWriter writer = response.getWriter();
		session = MBUtils.getSession();
		
		// 인터페이스를 별도로 구현없이 사용하기 위해 매퍼와 바로 연결
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
=======
		dao = session.getMapper(BuserDAO.class);
<<<<<<< HEAD
<<<<<<< Upstream, based on origin/master
>>>>>>> e77d7a0 2019-12-04  15:00
<<<<<<< HEAD
		dao = session.getMapper(BuserDAO.class);
		Buser mem = new Buser(mid, mname, mpassword,mphone,mjoinDate);
=======
		dao = session.getMapper(BuserDAO.class);
<<<<<<< HEAD
		Buser mem = new Buser(mid, mname, mpassword);
=======
		Buser mem = new Buser(mid, mname, mpassword, mphone, mjoinDate );
>>>>>>> refs/remotes/origin/master
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> fe99d9a3660eec6a4406e0b10aa02f8bd108a280
=======
>>>>>>> refs/remotes/origin/master
>>>>>>> refs/remotes/origin/master
=======
		Buser mem = new Buser(id, name, password,phone,joinDate);
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
		Buser mem = new Buser(id, name, password,phone,joinDate);
>>>>>>> refs/remotes/origin/ssy
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
		try {
			dao.insert(mem);			
			httpsession.setAttribute("joinedID", id);
			session.commit();
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
			response.sendRedirect("./JoinConfirm.do");
			
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("../main.do");			
=======
=======
>>>>>>> refs/remotes/origin/ssy
			
>>>>>>> 42c7f6f 2019-12-04  15:00
>>>>>>> e77d7a0 2019-12-04  15:00
		} catch (Exception e) {
			e.printStackTrace();
			session.rollback();					
			message ="정보를 확인하고 다시 시도해 주세요.";
			httpsession.setAttribute("message", message);
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
			response.sendRedirect("./memberJoin.jsp");
=======
=======
<<<<<<< HEAD
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
<<<<<<< Upstream, based on origin/master
			response.sendRedirect("./signup.jsp");
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
			response.sendRedirect("./member/signup.jsp");
>>>>>>> refs/remotes/origin/ssy
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
			return false;
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
		}
		session.close();
=======
<<<<<<< Upstream, based on origin/master
		} session.close();
=======
		}
		
		writer.print("축하합니다. 회원가입 되셨습니다.");
		writer.print("<a href='signup.jsp'>되돌아가기</a><br>"); // 가입화면
		writer.print("<a href='Login.jsp'>로그인하기</a><br>");	// 로그인화면
		
		session.close();
>>>>>>> 42c7f6f 2019-12-04  15:00
>>>>>>> e77d7a0 2019-12-04  15:00
		writer.close();
		return true;
		}
	}
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git

}
=======
<<<<<<< Upstream, based on origin/master
=======

<<<<<<< HEAD
>>>>>>> 42c7f6f 2019-12-04  15:00
<<<<<<< Upstream, based on branch 'seongyujin' of https://github.com/chynggi/LearningMan.git
}
>>>>>>> e77d7a0 2019-12-04  15:00
=======
=======
>>>>>>> refs/remotes/origin/ssy
}
>>>>>>> 9dfff4e Merge remote-tracking branch 'origin/ssy' into ssy
