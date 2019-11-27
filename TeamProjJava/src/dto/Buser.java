package dto;

public class Buser {
	private String id;	
	private String pw;
	private String name;
	private String phone;
	private String xdate;	
	
	
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
	public Buser() {
		super();
	}
	
	
	
}
