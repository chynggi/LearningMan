package dto;

public class Buser {
	private String id;	
	private String pw;
	private String name;
<<<<<<< HEAD
	private String phone;
	private String xdate;	
	
	
=======
	private String password;
	private String phone;
	private String xdate;
	public Buser(String id, String name, String password, String phone, String xdate) {
		super();
		this.id = id;
		this.name = name;
		this.password = password;
		this.phone = phone;
		this.xdate = xdate;
	}
>>>>>>> refs/remotes/origin/master
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
<<<<<<< HEAD
	public String getPw() {
		return pw;
	}
	public void setPw(String password) {
		this.pw = password;
=======
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getXdate() {
		return xdate;
	}
	public void setXdate(String xdate) {
		this.xdate = xdate;
	}
	@Override
	public String toString() {
		return "Buser [id=" + id + ", name=" + name + ", password=" + password + ", phone=" + phone + ", xdate=" + xdate
				+ "]";
>>>>>>> refs/remotes/origin/master
	}
	public String getName() {
		return name;
	}
<<<<<<< HEAD
=======
	
>>>>>>> refs/remotes/origin/master
	public void setName(String name) {
		this.name = name;
	}
	public String getPhone() {
		return phone;
	}
<<<<<<< HEAD
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getXdate() {
		return xdate;
	}
	public void setXdate(String xdate) {
		this.xdate = xdate;
	}
	
	@Override
	public String toString() {
		return "Buser [id=" + id + ", pw=" + pw + ", name=" + name + ", phone=" + phone + ", xdate=" + xdate
				+ "]";
	}
=======
	public void setPassword(String password) {
		this.password = password;
	}	
>>>>>>> refs/remotes/origin/master
	public Buser() {
		super();
	}	
}