export default function MyTBody(props) {
  return (
    <tbody>
      {props.receptek.map((e, i) => {
        return (
          <tr>
            <td>{e.nev}</td>
            <td>{e.kategoria}</td>
          </tr>
        );
      })}
    </tbody>
  );
}
