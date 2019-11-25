package common;

import java.io.IOException;
import java.io.InputStream;

import org.apache.ibatis.io.Resources;
import org.apache.ibatis.session.SqlSession;
import org.apache.ibatis.session.SqlSessionFactory;
import org.apache.ibatis.session.SqlSessionFactoryBuilder;

public class MBUtils {
	public static SqlSessionFactory getsqlSessionFactory() {
		String resource = "com/cyg/common/SqlMapConfig.xml";
		InputStream reader;
		try {
			reader = Resources.getResourceAsStream(resource);
		} catch (IOException e) {
			// TODO 새로운 예외로 발생시키기
			throw new IllegalArgumentException(e);
		}
		return new SqlSessionFactoryBuilder().build(reader);
	}
	
	public static SqlSession getSession() {
		//Using Transaction - openSession(false)
		//Using AutoCommit- openSession(true)
		return getsqlSessionFactory().openSession(false);	
	}
	
}