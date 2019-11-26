package dao;

import dto.Board;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public interface BoardDAO extends IDAO<Board, Long> {
	public long countofcontents();
	public Board selectById(long no);
	public Board info(long no);
}