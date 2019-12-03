package dao;

import java.util.HashMap;
import java.util.List;

import dto.Board;

public interface BoardDAO extends IDAO<Board, Long> {
	public long countofcontents();
	public Board info(long no);
	public int update(HashMap<String, Object> para);
	public int delete(HashMap<String, Object> para);
	public Board info(HashMap<String, Object> para);
	public int insert(HashMap<String, Object> para);
	public List<Board> selectAll(String tablename);
}
