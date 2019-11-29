package common;

import java.io.IOException;
import java.io.InputStream;
import org.apache.ibatis.io.Resources;
import org.apache.ibatis.session.SqlSession;
import org.apache.ibatis.session.SqlSessionFactory;
import org.apache.ibatis.session.SqlSessionFactoryBuilder;

public class MBUtils {
	
	public static SqlSessionFactory getSqlSessionFactory() {
		String resource = "common/SqlMapConfig.xml";

		InputStream  reader;

	public static SqlSessionFactory getsqlSessionFactory() {
		String resource = "common/SqlMapConfig.xml";
		InputStream reader;
		try {
			reader = Resources.getResourceAsStream(resource);
		}catch (IOException e) {

			throw new IllegalArgumentException(e);
		}
		return new SqlSessionFactoryBuilder().build(reader);
	}
	
	public static SqlSession getSession() {
		return getSqlSessionFactory().openSession(false);
	}
	
}