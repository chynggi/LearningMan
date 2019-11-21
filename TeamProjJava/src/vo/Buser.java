package vo;

public class Buser {
	
	private String id;//회원아이디
	private String name;//회원이름
	private String pw;//회원패스워드
	
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
	public String getPw() {
		return pw;
	}
	public void setPw(String pw) {
		this.pw = pw;
	}
	
	@Override
	public String toString() {
		return "BUser [id=" + id + ", name=" + name + ", pw=" + pw + "]";
	}
	
}
