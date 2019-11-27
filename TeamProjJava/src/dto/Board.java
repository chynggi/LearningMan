package dto;

import java.io.Serializable;

public class Board implements Serializable {
	private long no; //게시판번호
	private String id; //등록 회원 아이디
	private String title; //제목
	private String content; //내용
	private String xdate; //게시일자
	
	@Override
	public String toString() {
		return "Board [no=" + no + ", id=" + id + ", title=" + title + ", content=" + content + ", xdate=" + xdate
				+ "]";
	}

	public Board() {
		super();
		this.no = no;
		this.id = id;
		this.title = title;
		this.content = content;
		this.xdate = xdate;
	}

	public long getNo() {
		return no;
	}

	public void setNo(long no) {
		this.no = no;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public String getXdate() {
		return xdate;
	}

	public void setXdate(String xdate) {
		this.xdate = xdate;
	}

	
	
	

}
