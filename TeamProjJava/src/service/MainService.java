package service;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

public class MainService implements Service{
	@Override
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		response.setContentType("text/html;charset=UTF-8");
		HttpSession session = request.getSession();
		if(session.getAttribute("id")!=null) {
			response.sendRedirect("./index.jsp");
		} else {
			response.sendRedirect("./index.jsp");
		} return true;
	}
}