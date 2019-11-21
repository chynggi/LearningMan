package service;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

public class LogoutService implements Service {

	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		HttpSession session = request.getSession();		
		session.invalidate();
		response.setContentType("text/html;charset=UTF-8");
		response.sendRedirect("../main.do");
		return true;
	}

}
