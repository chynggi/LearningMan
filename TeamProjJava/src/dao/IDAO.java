package dao;

import java.util.List;

public interface IDAO<T, K> {
	//public boolean isExist(K key); 
	public List<T> selectAll();
	public void insert(T vo);
	public void update(T vo);
	public int delete(K key);
	public long maxIdNum();
}
