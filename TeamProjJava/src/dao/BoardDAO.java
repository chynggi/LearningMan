package dao;

import vo.Board;

public interface BoardDAO extends IDAO<Board,Long>{
	public long countRows(); 
}