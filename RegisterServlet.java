package com.mvc.controller;
import java.io.IOException;
import java.servlet.ServletException;
import java.servlet.http.HttpServletRequest;
import java.servlet.http.HttpServletResponse;
import com.mvc.bean.RegsiterBean;
import com.mvc.dao.RegisterDao;

public class RegisterServlet extends HttpServlet{
	public RegisterServlet(){}

	protected void doPost(HttpServletRequest request,HttpServletResponse response)
		throws ServletException,IOException{
			//recuperer tout les inputs dans les variables locales
			String name = request.getParameter("name");
			String email = request.getParameter("email");
			String password = request.getParameter("password");

			RegsiterBean regsiterBean = new RegsiterBean();
			regsiterBean.setName(name);
			regsiterBean.setEmail(email);
			regsiterBean.setPassword(password);

			RegisterDao registerDao = new RegisterDao();

			//envoyer les donnee dans la base de donnee

            String userRegistered = registerDao.registerUser(regsiterBean);

            if (userRegistered.equals("SUCCESS")) {
            	request.getRequestDispatcher("/Home.jsp").forward(request,response);
            }
            else{
            	request.setAttrubute("errMessage",userRegistered);
            	request.getRequestDispatcher("/Register.jsp").forward(request,response);
            }

		}
	

}