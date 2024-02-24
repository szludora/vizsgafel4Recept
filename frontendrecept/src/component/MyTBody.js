export default function MyTBody(props) {
  function mutat(id) {
    props.mutat(id);
  }
  return (
    <tbody>
      {props.receptek.map((e, i) => {
        return (
          <tr
            onClick={() => {
              mutat(e.id);
            }}
            key={i}
          >
            <td>{e.nev}</td>
            <td>{e.kategoria}</td>
          </tr>
        );
      })}
    </tbody>
  );
}
