package dao;

import java.util.List;

public interface IDAO<T,K> {
	public List<T> selectAll();
	public T selectById(K id);
	public int insert(T vo);
	public int delete(K id);
	public int update(T vo);
}