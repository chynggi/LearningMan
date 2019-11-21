package dao;

import java.util.List;

import vo.Board;

public interface BoardDAO extends IDAO<Board,String>{
	public long countRows(); 	
	public long countofcontents();
	public Board info(long no);

}