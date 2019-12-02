package dao;

import java.util.*;

import dto.Board;

public interface BoardDAO extends IDAO<Board, Long> {
	public List<Board> selectAll(String Tablename);
	public Board selectById(HashMap<String,Object> paras);
	public int insert(HashMap<String,Object> paras);
	public int delete(HashMap<String,Object> paras);
	public int update(HashMap<String,Object> paras);
	public long countofcontents();
	public Board info(HashMap<String, Object> paras);
}
