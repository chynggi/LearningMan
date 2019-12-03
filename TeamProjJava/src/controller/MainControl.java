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

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		actionDo(request, response);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		actionDo(request, response);
	}

	protected void actionDo(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		System.out.println("ActionDo Method");
		String uri = request.getRequestURI();
		System.out.println(uri);
		String contextPath = request.getContextPath();
		System.out.println(contextPath);
		String command = uri.substring(contextPath.length());
		System.out.println(command);
		// aaaa/bbbb/xxxx.do
		Service service = null; // Created Interface
		PrintWriter out = null;
		switch (command) {
		
		
		
		case "/login.do":	// 로그인
			System.out.println(command + "를 처리합니다.");
			try {
				service = new LoginService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/memberJoin.do":	// 회원가입
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberJoinService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/MemberInfo.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberInfoService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/confirmId.do":
			System.out.println(command + "를 처리합니다.");
			try {
				boolean res = new ConfirmIdService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
			
	
			
		case "/MemberInfoAdjust.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MemberInfoAdjustService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/main.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new MainService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/memberList.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new AllMemberListService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;		
		case "/Logout.do":
			System.out.println(command + "를 처리합니다.");
			try {
				service = new LogoutService();
				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
			
		case "/ServerSide/new.do":// 인서트

			System.out.println(command + "를 처리합니다.");
			try {
				service = new BoardInsertService();

				boolean res = service.execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;	
			
		case "/ServerSide/List.do":// 목록

			System.out.println(command+"를 처리합니다.");
			try {

				boolean res = new BoardListService().execute(request, response);

				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
			
		case "/ServerSide/info.do":// 게시글 보기(정보)

			System.out.println(command+"를 처리합니다.");
			try {
				boolean res = new BoardInfoService().execute(request, response);

				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
		case "/password.do":  // 비밀번호 찾기
			System.out.println(command+"를 처리합니다.");
			try {
				boolean res = new PasswordSeekService().execute(request, response);
				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			
			break;
		case "/ServerSide/adjust.do": // 게시글 수정

			System.out.println(command+"를 처리합니다.");
			try {
				boolean res = new BoardAdjustService().execute(request, response);

				System.out.println(res);
			} catch (Exception e) {
				e.printStackTrace();
			}
			break;
			}
	}
}

		
