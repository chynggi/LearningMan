package dao;

import java.util.List;

import dto.Board;

public interface BoardDAO extends IDAO<Board,Long>{
	public long countRows(); 	
	public long countofcontents();
	public Board info(long no);
	

}