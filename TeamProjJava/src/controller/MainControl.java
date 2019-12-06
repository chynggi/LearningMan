package controller;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import service.*;

@WebServlet("*.do")
public class MainControl extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public MainControl() {
		super();
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		actionDo(request, response);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		actionDo(request, response);
	}

	protected void actionDo(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println("ActionDo Method");
		String uri = request.getRequestURI();
		System.out.println(uri);
		String contextPath = request.getContextPath();
		System.out.println(contextPath);
		String command = uri.substring(contextPath.length());
		System.out.println(command);
		Service service = null; // Created Interface
		PrintWriter out = null;
		switch (command) {
		
		case "/login/login.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new LoginService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/member/memberJoin.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberJoinService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		/*
		 * case "/mymember/joinConfirm.do":
		 * System.out.println("joinConfirm.do를 처리합니다."); // 가입정보를 보여주고, 수정할게 있으면 수정하게 //
		 * 그렇치 않으면 확인 버튼을 눌러 로그인 화면으로 넘어가게 하는 서비스 service = new JoinConfirm‎Service();
		 * exe(service); 
		 * break;
		 */
			
		case "/member/MemberInfo.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberInfoService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/member/confirmId.do":
			System.out.println(command + "를 처리합니다.");
			try {
				boolean res = new ConfirmIdService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/member/delete.do":
			System.out.println(command + "를 처리합니다.");
			try {
				boolean res = new MemberDeleteService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/member/MemberInfoAdjust.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberInfoAdjustService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/main.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MainService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/member/memberList.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new AllMemberListService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;		
		case "/Logout.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new LogoutService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/DataAnalystics/new.do":
			System.out.println(command + "를 처리합니다.");
			try {
				request.setAttribute("tablename", "DABOARD");
				service = new BoardInsertService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;	
		case "/DataAnalystics/List.do":
			System.out.println(command+"를 처리합니다.");
			request.setAttribute("tablename","DABOARD");
			try {
				request.setAttribute("tablename", "DABOARD");
				boolean res = new BoardListService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/DataAnalystics/Info.do":
			System.out.println(command+"를 처리합니다.");
			request.setAttribute("tablename","DABOARD");
			try {
				request.setAttribute("tablename", "DABOARD");
				boolean res = new BoardInfoService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/DataAnalystics/delete.do":
			System.out.println(command+"를 처리합니다.");
			request.setAttribute("tablename","DABOARD");
			try {
				request.setAttribute("tablename", "DABOARD");
				boolean res = new BoardDeleteService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		case "/password.do":
			System.out.println(command+"를 처리합니다.");
			try {
				boolean res = new PasswordSeekService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();			
			} break; //Login처리부분
		case "/DataAnalystics/adjust.do":
			System.out.println(command+"를 처리합니다.");
			request.setAttribute("tablename","DABOARD");
			try {
				request.setAttribute("tablename", "DABOARD");
				boolean res = new BoardAdjustService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		case "/DBMSBoard/new.do":
			System.out.println(command + "를 처리합니다.");
			try {
				request.setAttribute("tablename", "DBMSBOARD");
				service = new BoardInsertService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			break;			
		case "/DBMSBoard/info.do":
			System.out.println(command+"를 처리합니다.");
			try {
				request.setAttribute("tablename", "DBMSBOARD");
				boolean res = new BoardInfoService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			break;
		case "/DBMSBoard/Delete.do":
			System.out.println(command+"를 처리합니다.");
			try {
				request.setAttribute("tablename", "DBMSBOARD");
				boolean res = new BoardDeleteService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			break;		
		case "/DBMSBoard/adjust.do":
			System.out.println(command+"를 처리합니다.");
			try {
				request.setAttribute("tablename", "DBMSBOARD");
				boolean res = new BoardAdjustService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			} break;
		}
	}
}