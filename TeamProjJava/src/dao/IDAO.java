package dao;

import java.util.List;

public interface IDAO<T, K> {
	//public boolean isExist(K key); 
	public List<T> selectAll();
	public T selectById(K key);
	public int insert(T vo);
	public int update(T vo);
	public int delete(K key);
	public long maxIdNum();
}
