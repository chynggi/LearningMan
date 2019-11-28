package service;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public interface Service {
	public boolean execute(HttpServletRequest request, HttpServletResponse response) throws Exception;
}
