package dto;

public class Buser {
	private String id;
	private String name;
	private String password;
	private String phone;
<<<<<<< Upstream, based on origin/master
	private String xdate;
	public Buser(String id, String name, String password, String phone, String xdate) {
		super();
		this.id = id;
		this.name = name;
		this.password = password;
		this.phone = phone;
		this.xdate = xdate;
	}
	public String getId() {
		return id;
	}
	public void setId(String id) {
=======
	private String date;
	
	
	public Buser(String id, String password, String name, String phone, String date) {
		super();
>>>>>>> 42c7f6f 2019-12-04  15:00
		this.id = id;
	}
	
	public String getId() {
		return id;
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
	}
	public String getName() {
		return name;
	}
	
	public void setName(String name) {
		this.name = name;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
<<<<<<< Upstream, based on origin/master
	}	
	public Buser() {
		super();
	}	
}
=======
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getDate() {
		return date;
	}
	public void setDate(String date) {
		this.date = date;
	}
	
	
	@Override
	public String toString() {
		return "Buser [id=" + id + ", password=" + password + ", name=" + name + ", phone=" + phone + ", date=" + date
				+ "]";
	}
	
}
>>>>>>> 42c7f6f 2019-12-04  15:00
