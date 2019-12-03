package dto;

public class Buser {
	private String id;
	private String name;
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
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
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
	}	
	public Buser() {
		super();
	}	
}