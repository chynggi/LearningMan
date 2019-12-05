package dto;

public class Buser {
	private String id;
	private String name;
	private String password;
	private String phone;
	private String date;
	public Buser(String id, String name, String password, String phone, String date) {
		super();
		this.id = id;
		this.name = name;
		this.password = password;
		this.phone = phone;
		this.date = date;
	}
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
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
		return "Buser [id=" + id + ", name=" + name + ", password=" + password + ", phone=" + phone + ", date=" + date
				+ "]";
	}
	
	
	
	
	
}
