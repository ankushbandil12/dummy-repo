import java.util.ArrayList;
import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class DummyServices {
  public String flexiLeaveBalance(String data) throws JSONException {
		JSONObject aimlobj = new JSONObject();
		JSONObject aimlobjReq = new JSONObject(data);
		aimlobj.put("response", "You have 2 flexi leaves.");
		aimlobj.put("aimlobjReq", aimlobjReq);
		JSONArray ja = new JSONArray();
		ja.put(aimlobj);
		return ja.toString();
	}
}
