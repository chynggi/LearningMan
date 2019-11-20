package dao;

import dto.Board;

public interface BoardDAO extends IDAO<Board, Long> {
	public long countofcontents();
}
