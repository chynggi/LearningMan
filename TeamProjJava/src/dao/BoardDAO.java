package dao;

import java.util.List;
import dto.Board;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public interface BoardDAO extends IDAO<Board,Long>{
	public long countRows(); 	
	public long countofcontents();
	public Board info(long no);
}