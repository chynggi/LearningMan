package dto;

public class Buser {
	private String id;	
	private String pw;
	private String name;
	private String phone;
	private String xdate;


	public Buser(String id, String name, String password, String phone, String xdate) {
		super();
		this.id = id;
		this.name = name;
		this.pw = password;
		this.phone = phone;
		this.xdate = xdate;
	}
	
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}
	public String getPw() {
		return pw;
	}
	public void setPw(String password) {
		this.pw = password;
	}
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
	
	public String getName() {
		return name;
	}
	
	public void setName(String name) {
		this.name = name;
	}

	
	@Override
	public String toString() {
		return "Buser [id=" + id + ", pw=" + pw + ", name=" + name + ", phone=" + phone + ", xdate=" + xdate
				+ "]";
	}

	public void setPassword(String password) {
		this.pw = password;
	}
	public Buser() {
		super();
	}	
}